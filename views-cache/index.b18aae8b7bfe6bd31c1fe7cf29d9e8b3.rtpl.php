<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      <p class="fa fa-dashboard"> Dashboard</p>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>
  <!-- Content Header (Page header) -->
  <!-- <section class="content-header">
    <h1>
      Page Header
      <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section> -->

  <!-- Main content -->
  <section class="content">

    <div class="row">
    	<div class="col-md-12">
    		<div class="box box-primary">
          <div class="box-body no-padding">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Login</th>
                  <th style="width: 60px">Admin</th>
                  <!-- <th style="width: 140px">&nbsp;</th> -->
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                  <td><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                  <td><?php if( $value1["inadmin"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?></td>
                  <!-- <td>
                    <a href="/admin/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                    <a href="/admin/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                  </td> -->
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

    <!-- Your Page Content Here -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
