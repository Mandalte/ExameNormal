<nav class="navbar navbar-inverse nav-users">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-taggle="collapse" data-target="bs-example-navbar-colapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('Exame Normal',['controller'=>'topknots','action'=>'index'],['class'=>'navbar-brand']) ?>
        </div>

       

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <?php if(isset($usuario_corrente)): ?>
                    <ul class="nav navbar-nav">
                                  
                    <?php if($usuario_corrente['role']=='admin'): ?>

                        <li class="dropdown">                       
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Topicos<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <?= $this->Html->link('criar',['controller'=>'topknots','action'=>"add"]) ?>
                                    </li>               
                                </ul>                        
                        </li>                
                    <?php endif ?>
                    

                    </ul>

                
                    <ul class="nav navbar-nav navbar-right">                        
                        <li> <?= $this->Html->link('Sair',['controller'=>'users','action'=>'logout']) ?> </li>
                    </ul>
                <?php endif ?>

                <ul class="nav navbar-nav navbar-right">                        
                    <li> <?= $this->Html->link('Regista-se',['controller'=>'users','action'=>'add']) ?> </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">                        
                    <li> <?= $this->Html->link('Logar',['controller'=>'users','action'=>'login']) ?> </li>
                </ul>

            </div>
    </div>
</nav>
