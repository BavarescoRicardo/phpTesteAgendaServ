<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
      </li>
   </ul>

   <ul class="navbar-nav ml-auto">
        
        </li>
      <!-- Navbar Search -->
      <li class="nav-item">
      <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
      
        <li class="nav-item" >
        <button type="submit" name="sair" class="btn btn-link">
            Sair
        </button>     
        </li>
      </form>
      </li>
  </ul>
 </nav>
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:auto;">
  
   <a href="../board/index.php" class="brand-link"> 
  EMPRESA
   </a>

   <div class="sidebar" style="min-height:100%;height:100%;">
    
     <nav class="mt-2" >
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
            <li class="nav-item">
              <a href="../funcionario/funcionario.php" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
                <p>
                  Funcionario
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../promocao/promocao.php" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
                <p>
                  Promoção
                </p>
              </a>
            </li>

       </ul>
     </nav>
    
   </div>
 
 </aside>

