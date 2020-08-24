<?php if($this->e($menuVisible)): ?>
    <nav class="navbar navbar-light bg-light sticky-top navbar-expand-lg">
        <a href="/" class="navbar-brand">APP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="faq" class="nav-link">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-sm btn-outline-primary navbar-a" href="#" role="button">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-sm btn-outline-secondary navbar-a" href="#" role="button">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>
<?php endif ?>