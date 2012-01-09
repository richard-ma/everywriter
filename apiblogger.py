import xmlrpclib
import xmlrpcserver

class ApiBlogger:
    def __init__(self, server, user):
        self.server = server
        self.user = user

    def getUserInfo(self):
        return self.server.blogger.getUserInfo(
                '',
                self.user.username,
                self.user.password)

    def getRecentPosts(self):
        return self.server.blogger.getRecentPosts(
                1,
                self.user.username,
                self.user.password)
