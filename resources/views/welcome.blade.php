<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
    <title>Cadastro de DEVs</title>
    <style>
* {
    margin: 0;
    padding: 0;
}


#titulo {
    font-family: sans-serif;
    color: black;
    margin-left: 7%;
} 


#subtitulo {
    font-family: sans-serif;
    color: black;
    margin-left: 10%;
} 

#check{
    display: inline-block;
}


fieldset {
    border: 0;
}


body{
    background-image: linear-gradient(to right, rgb(255,255,255), rgb(192,192,192));
    font-family: sans-serif;
    font-size: 1em;
    margin-left: 36%;
    margin-top: 2%;
    justify-content: center;
}


input, select, textarea, button {
    font-family: sans-serif;
    font-size: 1em;
    color:black;
    border-radius: 5px;
}


.grupo:before, .grupo:after {
    display: table;
}


.grupo:after {
    clear: both;
}


.campo {
    margin-bottom: 1em;
}


.campo label {
    margin-bottom: 0.2em;
    color: black;
    display: block;
}


fieldset.grupo .campo {
    float:  left;
    margin-right: 1em;
}


.campo input[type="text"], .campo input[type="email"], .campo select, .campo textarea {
    padding: 0.2em;
    border: 1px solid black;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
    display: block;
}


.campo select option {
    padding-right: 1em;
}


.campo input:focus, .campo select:focus, .campo textarea:focus {
    background: white;
}


.botao {
    font-size: 1.2em;
    background: white;
    margin-bottom: 1em;
    color: black;
    padding: 0.2em 0.6em;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
    position: absolute;
    top: 105%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
.box{
            color: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.616) ;padding: 10px;
            border-radius: 15px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.3);
            
        }


.botao:hover {
    background: white;
    box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: none;
}


.botao, select{
    cursor: pointer;
}

    </style>

</head>
<body>
    <div>
        <h1 id="titulo">Cadastro de DEVs</h1>
        <p id="subtitulo">Complete suas iformações</p>
        <br>
    </div>
    <form action="/formulariodev" method="POST">
        @csrf
    <div class="box">
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="text" name="email" id="email" required>
            </div>
            <br>
            <div class="campo">
                <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
                <label><input type="radio" name="devweb" value="frontend" checked>Front-end</label>
                <label><input type="radio" name="devweb" value="backend" checked>Back-end</label>
                <label><input type="radio" name="devweb" value="fullstack" checked>Fullstack</label>
            </div>
            <div class="campo">
                <label for="senioridade"><strong>Senioridade</strong></label>
                <select id="senioridade" name="senioridade" required>
                <option selected disable value="">Selecione</option>
                <option>Júnior</option>
                <option>Pleno</option>
                <option>Sênior</option>
                </select>   
            </div>
            <fieldset class="grupo">
                <div id="check">
                    <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML">
                    <label for="tecnologia1"> HTML</label>
                    <input type="checkbox" id="tecnologia2" name="tecnologia2" value="CSS">
                    <label for="tencologia2"> CSS</label>
                    <input type="checkbox" id="tecnologia3" name="tecnologia3" value="JavaScript">
                    <label for="tecnologia3"> JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="tecnologia4" value="PHP">
                    <label for="tecnologia4"> PHP</label>
                    <input type="checkbox" id="tecnologia5" name="tecnologia5" value="Python">
                    <label for="tecnologia5"> Python</label>
                    <input type="checkbox" id="tecnologia6" name="tecnologia6" value="C#">
                    <label for="tecnologia6"> C#</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Java">
                    <label for="tecnologia7"> Java</label>
                </div>
            </fieldset>
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Conte um pouco mais da sua experiência: </strong></label>
                <textarea name="experiencia" id="experiencia" style="width: 27em" rows="6"></textarea>
            </div>
            <button class="botao" type="submit" onsubmit="">Concluído</button>
    </form>
    </div>
</body>
</html>