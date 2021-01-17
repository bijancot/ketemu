<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
        <script src='https://meet.jit.si/external_api.js'></script>
    </head>
    <body>
        <section class="hero is-info is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-three-quarters">
                            <section class="is-fullheight"><div id="meeting"></div></section>
                        </div>
                        <div class="column">
                            <h1 class="title">
                                Ketemu
                                </h1>
                                <h2 class="subtitle">
                                Yet another meet app by diwangkara.dev
                                </h2>
                                <p class="help">your room id is : <?= $roomId?></p>  
                            <div class="card">
                                <div class="card-content">
                                  <p class="title has-text-dark">
                                    ad banner, sponsors should be here
                                  </p>
                                  <p class="subtitle has-text-dark">
                                    
                                  </p>
                                </div>
                                <footer class="card-footer">
                                  <p class="card-footer-item">
                                    <span>
                                      drop your proposals to <a href="mailto:panji@diwangkara.dev">hey@diwangkara.dev</a>
                                    </span>
                                  </p>
                                </footer>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
<footer class="footer">
            <div class="content has-text-centered">
              <p>
                <strong>Ketemu</strong> by <a href="https://diwangkara.dev">diwangkara.dev</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. Take a look at <a href="https://github.com/bijancot/ketemu">github repository</a> for further information ab$
              </p>
            </div>
          </footer>

        <script>
            const domain = 'meet.jit.si';
            const options = {
                roomName: '<?= $roomId?>',
                // width: 800,
                height: screen.height -243,
                parentNode: document.querySelector('#meeting')
            };
            const api = new JitsiMeetExternalAPI(domain, options);
        </script>
    </body>
</html>
