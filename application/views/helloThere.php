<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/bulma/css/bulma.min.css">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
        <section class="hero is-info is-fullheight">
            <div class="hero-body">
              <div class="container">
                <div class="columns">
                    <div class="column"></div>
                    <div class="column">
                        <h1 class="title">
                        Ketemu
                        </h1>
                        <h2 class="subtitle">
                        Yet another meet app
                        </h2>

                        <div class="card">
                            <div class="card-content">
                                <form action="meetnow/" method="post" id="createRoom">
                                    <div class="field">
                                        <label class="label">Room Name</label>
                                        <div class="control">
                                          <input class="input" type="text" name="room" placeholder="Type the name">
                                        </div>
                                        <p class="help">Use alphabet and number only no space allowed <br/>(abc-xyz0-9)</p>
                                      </div>
                                      <div class="field">
                                        <div class="control">
                                          <button class="button is-medium is-warning is-fullwidth"><strong>Create / Join Room</strong></button>
                                        </div>
                                      </div>
                                </form>
                            </div>
                        </div>
                        <br/>
                        <a href="#" class="has-text-weight-medium has-text-warning">More Information -></a>
                    </div>
                    <div class="column"></div>
                </div>
              </div>
            </div>
          </section>
          <footer class="footer">
            <div class="content has-text-centered">
              <p>
                <strong>Ketemu</strong> by <a href="https://panjibaskoro.web.id">Panji Baskoro</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. Take a look at <a href="https://github.com/bijancot/ketemu">github repository</a> for further information about the source code
              </p>
            </div>
          </footer>
    </body>
</html>