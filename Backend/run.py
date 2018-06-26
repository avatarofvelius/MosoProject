"""
    Moso Project.Backend
    ~~~~~~~~~~~~~~

    The Moso Project, a Flask Restful API Package for the A Managment Stystem For Writing Projects.

    Initially designed as a simple MySQL CRUD application written in PHP.
    A lack of knowledge of OOP and security practices and a focus on
    functional programming with PHP instead of OOP, left me wanting to 
    search for new oppertunites. Learning Python, and working with Django
    and Flask gave me some new options. 

    With the inclusion of flask-security and an understanding of Python,
    I can confidently deploy without relying on a forced localhost CRUD
    written in PHP to preserve the database's security.  

    :copyright: (c) 2018 by Nemi｡(⇀‸↼‶)Ran゜
    :license: GNU GENERAL PUBLIC LICENSE Version 3, see license.txt for more details.
"""
# !/usr/bin/env python3
# -*- coding: utf-8 -*-

# Full Path htdocs/Moso Project/Backend/run.py
# cd "Moso Project"
# cd Backend
# $env:FLASK_APP = "run.py"
# flask run

from flask import Flask, request, redirect, url_for, render_template, flash
from flask_admin import Admin
from flask_sqlalchemy import SQLAlchemy
from flask_migrate import Migrate
from flask_login import LoginManager
from flask_principal import Principal
from flask_mail import Mail

app = Flask(__name__)
app.config['DEBUG'] = True

@app.route('/')
def index():
    return 'Nemi｡(⇀‸↼‶)Ran゜\n<br> \n"It Works"'

@app.route('/admin')
def admin():
    return 'Admin Page'

@app.route('/api')
def api():
    return 'API Page'