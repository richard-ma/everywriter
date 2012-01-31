import xmlrpclib

from util import GAEXMLRPCTransport

class XmlrpcUser:
    def __init__(self, username, password):
        self.username = username
        self.password = password
        self.userid = ''
        self.nickname = ''
        self.firstname = ''
        self.lastname = ''

    def __str__(self):
        string = "%s [%s] [id:%s nickname:%s firstname:%s lastname:%s]" % (
                self.username,
                self.password,
                self.userid,
                self.nickname,
                self.firstname,
                self.lastname)
        return string

class XmlrpcBlog:
    def __init__(self, xmlrpc):
        self.url = ''
        self.blogid = ''
        self.isadmin = ''
        self.blogname = ''
        self.xmlrpc = xmlrpc

    def __str__(self):
        string = "[%s]%s [url:%s isadmin:%s xmlrpc:%s]" % (
                self.blogid,
                self.blogname,
                self.url,
                self.isadmin,
                self.xmlrpc)
        return string

class XmlrpcPost:
    def __init__(self):
        self.postid = ''
        self.user = ''
        self.date_created = ''
        self.post_status = ''
        self.title = ''
        self.description = ''
        self.link = ''
        self.permalink = ''
        self.tags = ''
        self.categories = ''

    def __str__(self):
        string = "[%s]%s [%s]" % (
                self.postid,
                self.title,
                self.description)
        return string

    def content(self):
        string = "<title>%s</title><category>%s</category>%s" % (
                self.title,
                self.categories,
                self.description)
        return string

class XmlrpcCategory:
    def __init__(self):
        self.categoryId = ''
        self.categoryName = ''

class XmlrpcServer:
    def __init__(self, blog, user):
        self.blog = blog
        self.user = user

        self.server = xmlrpclib.ServerProxy(self.blog.xmlrpc, GAEXMLRPCTransport())

        self._allowed_methods = self.server.system.listMethods()
        #self.user = self.getUserInfo()
        #self.blog = self.getUsersBlogs()

    def getAllowedMethods(self):
        return self._allowed_methods

    def _isSupported(self, methodName):
        try:
            self._allowed_methods.index(methodName)
            return True
        except:
            return False

    def getUserInfo(self):
        if self._isSupported('blogger.getUserInfo'):
            data =self.server.blogger.getUserInfo(
                    '',
                    self.user.username,
                    self.user.password)
            self.user.userid = data['userid']
            self.user.nickname = data['nickname']
            self.user.firstname = data['firstname']
            self.user.lastname = data['lastname']

            return self.user

    def getUsersBlogs(self):
        if self._isSupported('blogger.getUsersBlogs'
                ) or self._isSupported('metaWeblog.getUsersBlogs'
                ) or self._isSupported('wp.getUsersBlogs'):
            data = self.server.blogger.getUsersBlogs(
                    '',
                    self.user.username,
                    self.user.password)

            self.blog.blogid = data[0]['blogid']
            self.blog.blogname = data[0]['blogName']
            self.blog.isadmin = data[0]['isAdmin']
            self.blog.url = data[0]['url']
            self.blog.xmlrpc = data[0]['xmlrpc']

            return self.blog

    def newPost(self, post, publish=False):
        if self._isSupported('blogger.newPost'):
            post.postid = self.server.blogger.newPost(
                    '',
                    self.blog.blogid,
                    self.user.username,
                    self.user.password,
                    post.content(),
                    publish)
            return post
        elif self._isSupported('metaWeblog.newPost'):
            pass

    def editPost(self, post):
        pass

    def deletePost(self, post, publish=False):
        if self._isSupported('blogger.deletePost'
                ) or self._isSupported('metaWeblog.deletePost'):
# if post doesn't exsist, will raise an Exception
            return self.server.blogger.deletePost(
                    '',
                    post.postid,
                    self.user.username,
                    self.user.password,
                    publish)

    def listRecentPosts(self, limit):
        if self._isSupported('blogger.getRecentPosts'
                ) or self._isSupported('metaWeblog.getRecentPosts'):
# this method may return many posts
            return self.server.blogger.getRecentPosts(
                    '',
                    self.blog.blogid,
                    self.user.username,
                    self.user.password,
                    limit)

