#  BDD Wiki
## A wiki based testing project for [behat](http://behat.org).

[![Build Status](https://travis-ci.org/wscoble/bddwiki.png?branch=master)](https://travis-ci.org/wscoble/bddwiki)

Behavior driven development (BDD) works well with many businesses and projects.  [Behat](http://behat.org) is a popular
BDD framework for PHP, is easy to configure, and is easy to use.  However, executing tests stored outside the normal
features file structure is rather difficult.

I like [FitNesse](http://fitnesse.org) as a wiki based testing platform, but it's Java, not PHP based.  I like
[Moztrap](http://moztrap.mozilla.org), but it doesn't play well with Gherkin syntax; it does have a great API though.

What would it take to allow Behat to execute tests that live in a wiki?  That is what BDD Wiki is all about.

### Behat + Wiki = Win!

BDD Wiki is an extension for Behat that, when using drivers, can plug in to a wiki.  Just define your path structure
and start testing!

The first driver will be for Python markdoc since markdoc is a very simple, easy to use wiki.  Also, this driver will
show you that you don't need wiki software built with PHP to use BDD Wiki.