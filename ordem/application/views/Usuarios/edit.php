<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">                

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios'); ?>">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a title="Voltar" href="<?php echo base_url('usuarios'); ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
            </div>
            <div class="card-body">

                <form method="POST" name="form_edit">
                    <div class="mb-3 row">
                        <div class="col-md-4">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Informe o Nome" value="<?php echo $usuario->first_name; ?>" >
                            <?php echo form_error('first_name','<small class="form-text text-danger">','</small>');?>
                        </div>

                        <div class="col-md-4">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Informe o Sobrenome" value="<?php echo $usuario->last_name; ?>">
                            <?php echo form_error('last_name','<small class="form-text text-danger">','</small>');?>
                        </div>

                        <div class="col-md-4">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Informe o seu Login" value="<?php echo $usuario->email; ?>" >
                            <?php echo form_error('email','<small class="form-text text-danger">','</small>');?>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        
                        <div class="col-md-4">
                            <label>Usuário&nbsp;(Login)</label>
                            <input type="text" class="form-control" name="username" placeholder="Seu usuário" value="<?php echo $usuario->username; ?>" >
                            <?php echo form_error('username','<small class="form-text text-danger">','</small>');?>
                        </div>

                        <div class="col-md-4">
                            <label>Ativo</label>
                            <select class="form-control" name="active">
                                <option value="0" <?php echo ($usuario->active == 0) ? 'selected' : '' ?>> Não </option>
                                <option value="1" <?php echo ($usuario->active == 1) ? 'selected' : '' ?>> Sim </option>
                            </select>
                        </div>  
                        
                        <div class="col-md-4">
                        <label>Perfil de acesso</label>

                        <select class="custom-select" name="perfil_usuario">

                            <option value="2" <?php echo ($perfil->id == 2) ? 'selected' : '' ?>>Vendedor</option>
                            <option value="1" <?php echo ($perfil->id == 1) ? 'selected' : '' ?>>Administrador</option>

                        </select>
                        </div>

                    </div>


                    <div class="mb-3 row">
                        
                        <div class="col-md-6">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="password" placeholder="Sua senha">
                            <?php echo form_error('password','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-6">
                            <label>Confirmação de Senha</label>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Repita sua Senha">
                            <?php echo form_error('confirm_password','<small class="form-text text-danger">','</small>');?>
                        </div>
                        
                        <input type="hidden" name="user_id" value="<?php echo $usuario->id; ?>">


                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

