import xmlrpclib
import xmlrpcserver

class ApiMovableType:
    def __init__(self, server, user, blog):
        self.blog = blog
        self.server = server
        self.user = user

    def getCategoryList(self):
        return self.server.mt.getCategoryList(
                self.blog.blogId,
                self.user.username,
                self.user.password)
