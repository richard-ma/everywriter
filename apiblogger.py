import xmlrpclib
import xmlrpc_server

class Blogger:
    def __init__(self, server, user):
        self.server = server
        self.user = user

    def getUserInfo(self):
        return self.server.blogger.getUserInfo('', self.user.username, self.user.password)
