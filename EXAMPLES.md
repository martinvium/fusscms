Examples of Nodes and Config
============================

Example Type (article.yml)
--------------------------

~~~
title: Article
fields:
  -
    name: some_field
    title: Some text field
    field: text
  - 
    name: banner1
    title: Banner
    field: 400x400
  - 
    name: banner2
    title: Banner2
    field: image
    image:
      width: 200
      height: 200
  - 
    name: attachments
    title: Attachment
    count: 1 (default), 0 (infinite), n (custom)
    field: file
    file:
      mimes:
        application/zip
      extensions: 7z
~~~

Example Article (how-to-use-php-cms.en.md)
------------------------------------------

~~~
title: How to use PHP CMS
type: article
published: true
author: node:users/abcde
path: tutorials/:name
created: 2014..
some_field: some data
banner: 
  value: [Alt](path/to/image.png)
---
This is some content which is awesome and supports markdown or textile...

It is in english?
~~~

Example Menu (main.yml)
-----------------------

~~~
- 
  title: Home
  path: ~
- 
  title: Webshop
  path: ://store.example.com/sub
- 
  title: Articles
  path: articles
  children:
    collection: latest_articles
~~~

Example Collection (articles.yml)
---------------------------------

~~~
order: created asc
filters:
  type: article
limit: 200 (useful when embedding collections e.g. in menu or a block)
paging:
  size: 50
view: layouts/collections/article.html.twig
~~~

Example Config (application.yml)
--------------------------------

~~~
title: My App
authentication:
  collection: active_users
~~~