import os
import cgi
import datetime
import urllib
import wsgiref.handlers

import xmlrpclib
import xmlrpcserver
import apiblogger
import apimovabletype

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
        blog = xmlrpcserver.XmlrpcBlog(
                self.request.get('xmlrpc'))
        user = xmlrpcserver.XmlrpcUser(
                self.request.get('username'),
                self.request.get('password'))
        op = self.request.get('op')

        post = xmlrpcserver.XmlrpcPost()
        server = xmlrpcserver.XmlrpcServer(blog, user)
        post.title = self.request.get('title')
        post.description = self.request.get('content')

        if op == 'newpost':
            server.newPost(post, True)

class  AjaxPostHandler(webapp.RequestHandler):
    def post(self):
        pass

class AjaxDebugHandler(webapp.RequestHandler):
    def get(self):
        self.response.out.write('ajax debug handlers test')

controllerList = [
        ('/', indexHandler),
        ('/frontend', FrontendHandler),
        ('/backend', BackendHandler),
# Ajax Post Url
        ('/ajax/debug', AjaxDebugHandler),
        ('/ajax/post', AjaxPostHandler),
        ]

application = webapp.WSGIApplication(
        controllerList,
        debug=True)

if __name__ == "__main__":
    run_wsgi_app(application)
