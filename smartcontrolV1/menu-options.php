<aside class="protective-layer">
    <!-- Container Section -->
    <section class="col col-spacing-5" style="margin-bottom: 15px;">
        <article class="container-this flex-a-center align-items-center">
            <div class="perfil ml-2 mr-2">
                <div>
                    <img draggable="false" class="img-perfil" src="profile/profile-picture.png">
                </div>
            </div>
            <!-- Choose Condominium -->
            <div class="menu">
                <select name="condominio" id="viewerDashboard" class="townhouse h-fill w-fill text-white border-0 flex-a-center">
                    <option>Spazio Mondrian</option>
                    <option>Residencial Espanha</option>
                </select>
            </div>
            <!-- Options -->
            <div id="container-options" class="row ml-3 mr-3 m-0">
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button id="motores" class="button-skin">
                        <i class="fa fa-gears"></i> <span class="title-span">Motores</span>
                    </button>
                    <ul class="sublist small">
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Bloco 1</li>
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Bloco 2</li>
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Bloco 3</li>
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Bloco 4</li>
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Bloco 5</li>
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Bloco 6</li>
                        <li onclick="window.location.href='./modulo.php?var=motores'" class="sublist-item">Motor de Entrada</li>
                    </ul>
                </div>
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button id="energia" class="button-skin">
                        <i class="fas fa-bolt"></i> <span class="title-span">Energia</span>
                    </button>
                    <ul class="sublist small">
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Bloco 1</li>
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Bloco 2</li>
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Bloco 3</li>
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Bloco 4</li>
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Bloco 5</li>
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Bloco 6</li>
                        <li onclick="window.location.href='./modulo.php?var=energia'" class="sublist-item">Administração</li>
                    </ul>
                </div>
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button id="caixas" class="button-skin">
                        <i class="fas fa-tint"></i> <span class="title-span">Caixa D'água</span>
                    </button>
                    <ul class="sublist small">
                        <li onclick="window.location.href='./modulo.php?var=caixas'" class="sublist-item">Bloco 1</li>
                        <li onclick="window.location.href='./modulo.php?var=caixas'" class="sublist-item">Bloco 2</li>
                        <li onclick="window.location.href='./modulo.php?var=caixas'" class="sublist-item">Bloco 3</li>
                        <li onclick="window.location.href='./modulo.php?var=caixas'" class="sublist-item">Bloco 4</li>
                        <li onclick="window.location.href='./modulo.php?var=caixas'" class="sublist-item">Bloco 5</li>
                    </ul>
                </div>
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button onclick="window.location.href='./modulo.php?var=inventario'" id="inventario" class="button-skin">
                        <i class="fas fa-file-invoice"></i> <span class="title-span">Inventário</span>
                    </button>
                </div>
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button onclick="window.location.href='./modulo.php?var=tarefas'" id="tarefas" class="button-skin">
                        <i class="fas fa-tasks"></i> <span class="title-span">Tarefas</span>
                    </button>
                </div>
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button onclick="window.location.href='./modulo.php?var=reciclagem'" id="reciclagem" class="button-skin">
                        <i class="fas fa-recycle"></i> <span class="title-span">Reciclagem</span>
                    </button>
                </div>
                <div class="p-relative pl-1 pr-1 mt-2 mb-2">
                    <button class="button-skin">
                        <i class="fa fa-users"></i>
                        <span class="title-span">Usuários</span>
                        <span class="label-success pl-1 pr-1 rounded">
                            3
                        </span>
                    </button>
                    <ul class="sublist small">
                        <a href="#listarUser" rel="Modal">
                            <li class="sublist-item">Listar Usuário</li>
                        </a>
                        <a href="#novoUsuario" rel="Modal">
                            <li class="sublist-item">Novo Usuário</li>
                        </a>
                    </ul>
                </div>
            </div>
        </article>
    </section>
</aside>