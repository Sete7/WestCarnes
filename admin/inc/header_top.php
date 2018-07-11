<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Usuário</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=user">Cadastrar</a></li>
                <li><a href="?pagina=editarUser">Listar</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Categoria</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=categoria">Cadastrar</a></li>
                <li><a href="?pagina=categoriaListar">Listar</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Produto</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=produto">Cadastrar</a></li>
                <li><a href="?pagina=listarProduto">Listar</a></li>
            </ul>
        </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Receita</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=receita">Cadastrar</a></li>
                <li><a href="?pagina=listarReceita">Listar</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p><?php echo $_SESSION['nome']; ?></p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="ti-settings"></i>
                <p>Settings</p>
            </a>
        </li>
    </ul>

</div>