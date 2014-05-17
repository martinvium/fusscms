PHP CMS
=======

The idea is to store everything in the filesystem and just cache everything instead?

- Heavy use of YAML inheritance
- Page meta data...
- Collections should be usable in configs (see authentication)
- Allow building webservice api's?
- Files meta data?
- Tags for embedding other nodes and collections in nodes and layouts
- Weight...
- Revisions come from source control...
- Field processors can expose options in a namespace of the same name
- Built in node fields
  - title
  - path
  - created
  - published
  - weight (not required until collections)
  - author? (should maybe be a regular field... however there could be permission related problems?)

Getting Started
---------------

- Locate content in nodes/ relative to url
- Parse .md files
- Expose parsed body to the views
- Read yml header
- Expose "title" to the layout/views
- Hook path field into router?
- Throw error for unknown elements in yml part of .md
- Allow translations based on 2nd level file extension
- Load type def based on the type option in .md
- Implement image field type...
  - Field processor
  - Allow namespace in yml part of .md based on processor
  - Throw error if file referenced is invalid based on options (mime, dimensions)
  - Expose field to view if valid
- Menu?
- Implement other fields?
- Allow embedding fields in markdown
- Types inheritance?
- Allow specifying view

Folder Structure
----------------

  public/
    index.php
    assets -> /assets
    files/
      default -> /files/default

  config/
    application.yml
    image_styles.yml
    redirects.yml
    languages.yml
    locale.yml
    permissions.yml
    groups.yml
    types/
      user.yml
      article.yml
      tutorial.yml (article)
      comment.yml
      quote.yml
      event.yml
      learn/
        module.yml
        lesson.yml
    menus/
      main.yml
    collections/
      articles.yml
      latest_articles.yml
      active_users.yml

  nodes/
    users/
      1.md
      2.md
    articles/
      how-to-use-php-cms.en.md
      creating-a-node/en.md
      creating-a-node/dk.md
    comments/
      how-to-use-php-cms/
      creating-a-node/
        1.md
        2.md
        3.md
    quotes/
      martin-vium-1.md
    events/
      some-event-in-russia-2014-05-01.md
    promotion/
      some-event-in-russia.md
      my-product-is-awesome.md

  files/
    default/
      file.zip
      file.jpg
    promotions/
      an-image.png

  views/
    layouts/
      main.html.twig
      secondary.html.twig
    types/
      article.html.twig
    collections/ (?)
      article.html.twig

  plugins/
  core/plugins/
    menu/
      menu.yml
      menu.php
      menu.html.twig

  assets/
    css/
    js/
    images/

[Examples](EXAMPLES.md)
