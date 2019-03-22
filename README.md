WordCamp US 2019 Theme
==========================

This is the theme used for the WordCamp US website. The compiled CSS is loaded by the us.wordcamp.org site, while the child theme itself can be used in a local development environment.

To work on the site:

1. To get a local install, set up the [wordpress-meta-environment](https://github.com/WordPress/meta-environment), and follow [this guide](https://ryelle.codes/2016/07/local-development-for-wordcamp-websites/) to set up a new wordcamp site, using this repo as your child theme.
2. Create a new branch
3. Make your changes in the Sass as needed, see "CSS Structure" for where things live.
4. You can run `npm run watch`, which will rebuild the CSS as you're working, and also works with [livereload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) (alternately you can run `npm run build` to do a one-time build of the CSS)
5. Commit your changes, including the compiled CSS
6. Create a PR for your change
