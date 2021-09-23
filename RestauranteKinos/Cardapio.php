<!doctype html>
<html lang ="pt-ao">
<head>
<title> Restaurante Kinos</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Estilo/EstiloCard.css"/>
<link rel="stylesheet" type="text/css" href="Estilo/Estilo.css"/>
<script language="javascript" src="javascript/funcoes.js"></script>
</head>
<body>
<div id="corp">
<header id="cabecalho">
</br></br></br>
<hgroup>
<h1>Kinos </h1>
<h2>O Melhor Restaurante de Angola</h2>
</hgroup>
<img id="icone" src="imagens/Menu/Cardapio.png"/>


<nav id="menu">

	<h1>Menu Cardapio</h1>
	
<ul>
<li onmouseover= "mudaFoto('imagens/Menu/Home.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="Index.php">Inicio</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Cardapio.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="Cardapio.php">Cardapio</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Bebidas.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="Bebida.php">Bebidas</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/SejaMembro.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="CadCliente.php">Seja Membro</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Contato.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"> <a href="SobreNos.php">Sobre Nós</a></li>
</ul>
</nav>
</header>
</div>
</br>
<h1 id="Bv">Bem-Vindo Cardápio Comida</h1>
<div id= "cardapio">

<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total1();">
<script>
	function calc_total1(){
	var qtd = parseInt(document.getElementById('cQtd1').value);
	tot = qtd * 3500;
	document.getElementById('cTot1').value = tot;
	}
</script>
<h2>Fino</h2>
<img src="imagens/cardapio/fino.jpg">
<p>Carne com Purer de Batata e Nata</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd1" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot1" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>3500KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total2();">
<script>
	function calc_total2(){
	var qtd = parseInt(document.getElementById('cQtd2').value);
	tot = qtd * 1500;
	document.getElementById('cTot2').value = tot;
	}
</script>
<h2>Muamba</h2>
<img src="imagens/cardapio/Muamba.jpg">
<p>Muamba com Galinha Rija</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd2" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot2" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>1500KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total3();">
<script>
	function calc_total3(){
	var qtd = parseInt(document.getElementById('cQtd3').value);
	tot = qtd * 2000;
	document.getElementById('cTot3').value = tot;
	}
</script>
<h2>Funge Com Kiabo</h2>
<img src="imagens/cardapio/FungeK.png">
<p>Funge com Kiabo</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd3" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot3" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>2000KZ</h1>
<button>Comprar</button>

</div>
</div>

<div id= "cardapio">
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total4();">
<script>
	function calc_total4(){
	var qtd = parseInt(document.getElementById('cQtd4').value);
	tot = qtd * 2500;
	document.getElementById('cTot4').value = tot;
	}
</script>
<h2>Molho</h2>
<img src="imagens/cardapio/Kiabo.jpg">
<p>Molho de Kiabo</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd4" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot4" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>2500KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total5();">
<script>
	function calc_total5(){
	var qtd = parseInt(document.getElementById('cQtd5').value);
	tot = qtd * 4000;
	document.getElementById('cTot5').value = tot;
	}
</script>
<h2>Arroz</h2>
<img src="imagens/cardapio/Arroz.jpg">
<p>Arro Com Bacalhau</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd5" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot5" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>4000KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total();">
<script>
	function calc_total(){
	var qtd = parseInt(document.getElementById('cQtd').value);
	tot = qtd * 5000;
	document.getElementById('cTot').value = tot;
	}
</script>
<h2>Bananas</h2>
<img src="imagens/cardapio/Bananas.jpg">
<p>Bananas Com Salada</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>5000KZ</h1>
<button>Comprar</button>

</div>

</div>

<footer id="rodape">
<p>Copyright &copy; 2013 - by Augusto Hermogenio Mulato<br/>
<a href="#">Facebook</a> | <a href="#">Twitter</a></p>
</footer>
</body>
</html>