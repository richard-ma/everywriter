import os
import cgi
import datetime
import urllib
import wsgiref.handlers

import xmlrpclib
import xmlrpc_server
import api_blogger
from util import GAEXMLRPCTransport


from google.appengine.ext import db
from google.appengine.api import users
from google.appengine.ext import webapp
from google.appengine.ext.webapp.util import run_wsgi_app
from google.appengine.ext.webapp import template

class indexHandler(webapp.RequestHandler):
    def get(self):
        user = users.get_current_user()
        if user:
            self.redirect('/frontend')
        else:
            self.redirect(users.create_login_url(self.request.uri))

    def post(self):
        self.error(404)

class FrontendHandler(webapp.RequestHandler):
    def get(self):
        user = users.get_current_user()
        if not user:
            self.redirect('/')

        template_values = {
                'user': user,
                'url': users.create_logout_url('/'),
                'url_linktext': 'Logout'
        }

        path = os.path.join(os.path.dirname(__file__), 'frontend.html')
        self.response.out.write(template.render(path, template_values))

    def post(self):
        self.error(404)

class BackendHandler(webapp.RequestHandler):
    def get(self):
        self.error(404)

    def post(self):
        url = "http://127.0.0.1/wordpress/xmlrpc.php"
        username = "tjlug"
        password = "tjlug"
        user = xmlrpc_server.User(username, password)

        server = xmlrpclib.ServerProxy(url, GAEXMLRPCTransport())

        blogger = api_blogger.Blogger(server, user)
        self.response.out.write(blogger.getUserInfo())

        self.response.out.write(self.request.get('content'))

application = webapp.WSGIApplication(
        [('/', indexHandler),
        ('/frontend', FrontendHandler),
        ('/backend', BackendHandler)],
        debug=True)

if __name__ == "__main__":
    run_wsgi_app(application)
