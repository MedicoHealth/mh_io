  <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.css">
  <script>
      window.addEventListener("load", function(){
          window.cookieconsent.initialise({
              content: {
              header: 'Cookies used on the website!',
              message: 'We use cookies to ensure that we give you the best experience on our website. By continuing to use our site, you accept our use of cookies, revised Privacy Policy and Terms of Use. To learn more, click',
              dismiss: 'Got it!',
              allow: 'Allow cookies',
              deny: 'Decline',
              link: 'here.',
              href: '/documents/GDPR123.pdf',
              close: '&#x274c;',
            },
            autoOpen: true,
              "palette": {
                  "popup": {
                      "background": "#000"
                  },
                  "button": {
                      "background": "#3eb3c3",
                      "color": "#fff"
                  }
              }
          })});
  </script>