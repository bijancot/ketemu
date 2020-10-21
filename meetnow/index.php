<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/bulma/css/bulma.min.css">
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
                                <h3 class="subtitle">
                                your room id is : <?= $_POST['room']?>
                                </h3>  
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
                                      drop your proposals to <a href="mailto:workwith@panjibaskoro.web.id">our mail</a>
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
                roomName: '<?= $_POST['room']?>',
                // width: 800,
                height: screen.height -243,
                parentNode: document.querySelector('#meeting')
            };
            const api = new JitsiMeetExternalAPI(domain, options);
        </script>
    </body>
</html>