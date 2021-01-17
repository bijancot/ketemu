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
                                Yet another meet app
                                </h2>   
                                <p class="help">your room id is : <?= $roomId?></p>  
                            <div class="card">
                                <div class="card-content">
                                  <p class="title has-text-dark">
                                    ad banner, sponsors should be here
                                  </p>
                                  <p class="subtitle">
                                    Jeff Atwood
                                  </p>
                                </div>
                                <footer class="card-footer">
                                  <p class="card-footer-item">
                                    <span>
                                      drop your proposals to <a href="mailto:hey@diwangkara.dev">our mail</a>
                                    </span>
                                  </p>
                                </footer>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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