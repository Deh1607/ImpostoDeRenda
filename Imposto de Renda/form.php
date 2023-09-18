<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="image/png" href="./assets/images/tkr__.jpg">

<title>Calcular</title>

</head>
<body>
<nav>
    <img class="logo" src="./assets/images/tkr__.jpg" width="115" height="110" alt="Logo da Empresa">
    <ul>

        <li><a href="./index.html" target="-blank" rel="external">Home</a></li>
    </ul>
</nav>
<main>
<div class="wrapp">

<h1 class="text-center"> Calcule o Imposto de Renda </h1>

<form name="IRRF" action="" method="POST">

    <table class="table table-striped table-hover">

        <br><br><br><br>

        <div class="row">

            <div class="col-sm-5">

            </div>

            <div class="col-sm-2">

                <label for="salario" class="form-label">Digite o seu salário:</label>

                <input type="text" class="form-control" id="s" name="s"/>  

            </div>

            <div class="col-sm-5">

            </div>
           

            <div class="row">

            <div class="col-sm-5">

            </div>

            <div class="col-sm-2">

                <br/>

                <hr>

                <button type="submit" class="btn btn-light" name="cal">Calcular</button>

                &nbsp; 

                <button type="submit" class="btn btn-light" name="lim">Limpar</button>
                
                &nbsp; &nbsp; 
                

            </div>

            <div class="col-sm-5">

            </div>

        </div>

    </table>

    <?php
    if(isset($_POST["cal"])){
    
    $s = $_POST["s"];
    
     $taxa = 0;
    
     $desconto=0;
    
    //calculando o desconto
    
     if($s <= 1903.98){
        $desconto= isento;
    
     }
     else if($s >= 1903.99 && $s <= 2826.65){
     $taxa = 7.5;
     $desconto= 142.80;
    
    }
    else if($s >= 2826.66 && $s <= 3751.05){
    $taxa = 15;
    $desconto= 354.80;
    
     }
    else if($s >= 3751.06 && $s <= 4664.68){
    $taxa = 22.5;
     $desconto= 636.13;
     }
     else if ($s > 4664.68){
    $taxa = 27.5;
    $desconto= 869.36;
     }

    }
    
     ?>
    
    <div class="row">
    
     <div class="col-sm-4"></div>
        
         <div class="col-sm-4">
            
        
         <table class="table table-dark table-hover">
        
        <tr>
        
        <td>Salario Bruto($)</td>
        
        <td>Alíquota(%)</td>
        
         <td>Desconto</td>
        
         </tr>
        
       <tr>
        
         <td><?php echo $s; ?></td>
        
        <td><?php echo $taxa; ?></td>
        
        <td><?php echo $desconto; ?></td>
        
        </tr>
        
       </table>
        
         </div>
        
         <div class="col-sm-4"></div>
        
        </div>
        
        
        
        
        <div class="col-sm-4">
        
        
        
        
        </div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Carlito:ital,wght@1,700&family=Poppins:wght@200;400&family=Roboto+Condensed&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Carlito:ital,wght@1,700&family=Poppins:wght@200&family=Roboto+Condensed&display=swap');

        /* Body styles */
body {
    background-image: linear-gradient(to top,orange  25%, #2a2a2a 100%);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
}


/* Navigation styles */
nav {
    background-color: #0000;
    padding: 10px;
    font-family: 'Poppins', sans-serif ;
}

nav ul {
    list-style: none;
    margin: 10px;
    padding: 0;
    display: flex;
    justify-content: flex-end;
    float: right;
    margin-right: 5px;

}

nav li {
    display: inline-block;
    margin: 5px;
}

nav a {
    background-color: #0000;
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
}

nav img{
    margin: 20px;
    padding: 15px;
    border-radius: 50%;
}

nav a:hover {
    background-color: #0000;
    color: #ffff;
}

/* Main content styles */
main {
    padding: 20px;
}


.logo{
    margin: -20px;;
}
h1{ 
font-family: 'Roboto Condensed', sans-serif;
color: #fff;}

.form-label{
    font-family: 'Poppins', sans-serif ;
    color: #fff;
    display:flex;
    justify-content:center;

}
td{
    font-family: 'Poppins', sans-serif ;
color: #fff;
}
button{
    font-family: 'Poppins', sans-serif ;
color: #fff;
text
}

</style>

</br></br></br></br></br></br></br></br></br></br>

</main>
</body>
</html>
