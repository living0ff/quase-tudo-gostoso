          <header class="bg-info">
            <div class="max-width">
              <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href="{{BASE}}"><img src="{{BASE}}assets/img/logo.png" class="logo"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navmenu">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                  <ul class="navbar-nav mr-5">
                    <li class="nav-item active">
                      <a class="nav-link novareceita" href="{{BASE}}?url=nova">Cadastrar Receita</a>
                    </li>

                    <form class="form-inline justify-content-center" method="get" action="{{BASE}}?url=busca" id="frmBusca">
                      <div class="input-group">
                        <input class="form-control ml-5" type="text" placeholder="O que você procura?" id="txtTermoBusca">
                        <div class="input-group-append">
                          <button class="btn btn-secondary bg-danger" type="submit">Buscar</button>
                        </div>
                      </div>
                    </form>
                  </ul>
                </div>
              </nav>
            </div>
          </header>