<?php
  
  echo "<div id='menu-administracao' >";
  
    echo "<a href='".base_url()."administracao'>Home</a>";        
    echo br();
    
    echo heading('Administração',3);
    
    $lista[]="<a href='".base_url()."administracao/categorias'>Gerenciar Categorias</a>";
    $lista[]="<a href='".base_url()."administracao/produtos'>Gerenciar Produtos</a>";
    $lista[]="<a href='".base_url()."administracao/usuarios'>Gerenciar Usuarios</a>";
    $lista[]="<a href='".base_url()."administracao/home/logout'>Sair</a>";
    
    echo ul($lista);    
  
  echo "</div>";
    
  
?>