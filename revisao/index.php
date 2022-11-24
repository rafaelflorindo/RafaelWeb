<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rafael - Web - Revisão</title>
</head>
<body>
    <header>
        <img src="<local e o nome da imagem>" 
            width="largura da imagem" 
            heigth="altura da imagem"
            title="titulo"
            alt="texto alternativo">
        <h1>Titulo da Página</h1>

        <nav><!--menu de navegação principal-->
            <ul>
                <a href="<link da página>"><li>Item do menu 1</li></a>
                <a href="<link da página>"><li>Item do menu 2</li></a>
                <a href="<link da página>"><li>Item do menu 3</li></a>
            </ul>
        </nav>
    </header>

    <main><!-- corpo principal da página -->

        <section>
            <header><h1>Título da seção</h1></header>
            <p>Descrição</p>

            <article>
                <header><h2>Artigo 1</h2></header>
                <img>
            </article>

            <article>
                <header><h2>Artigo 2</h2></header>
                <img>
            </article>

            <article>
                <header><h2>Artigo 3</h2></header>
                <img>
            </article>

            <h3>xxxxx</h3>
        </section>
        <article>
            <form action="arquivo que receberá os campos" method="POST ou GET">
<!-- GET os dados ficam disponíveis na URL
POST - dados ocultos
-->
    <input type="" name = "nome do campo">
    <!-- type [text, email, number, tel, radio, checkbox]-->
    
    <select name = "estado">
        <option value="valor"></option>
        <option value="SP">SP</option>
        <option value="RJ">RJ</option>
    </select>

    <input type = "submit" value="nome que aparece no botão">
    <!-- submit = ação de enviar -->
            </form>
        </article>  
    </main>

    <footer> <!-- readapé -->
        <ul>
            <a href="<link da página>"><li>Item do menu 1</li></a>
            <a href="<link da página>"><li>Item do menu 2</li></a>
            <a href="<link da página>"><li>Item do menu 3</li></a>
        </ul>
    </footer>

</body>
</html>