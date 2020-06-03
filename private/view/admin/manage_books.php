<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="../../../css/style.css" rel="stylesheet"/>
        <script src="../../../js/cr_books.js"></script>

        <title>Creación de Libros</title>
    </head>
    <body>
        <div id="main_notice" class="e_hidden">	
            <div id="notice" class="div_notice"><p>AVISOS:</p></div>
        </div>
        <form id="f_book">
            <label for="i_book_name" class="" >Nombre:</label>
            <input type="text" name="i_book_name" id="i_book_name" class="" 
                placeholder="Ingrese el nombre del Libro"/>

            <br>

            <label for="i_isbn" class="" >ISBN:</label>
            <input type="text" name="i_isbn" id="i_isbn" class="" 
                placeholder="Ingrese el ISBN"/>

            <br>

            <label for="i_num_pag" class="" >N. Páginas:</label>
            <input type="text" name="i_num_pag" id="i_num_pag" class="" 
                placeholder="Ingrese el total de páginas"/>

            <br>

            <label for="i_author" class="" >Código del Autor:</label>
            <input type="text" name="i_author" id="i_author" class="" 
                placeholder="Ingrese el Código del Autor"/>

            <input type="button" value="Buscar Autor" onclick="searchAuthor()">

            <br>
            <input type="button" value="Crear Libro" onclick="createBook()">
        </form>

        <table id="t_author" class="e-hidden">

        </table>
        
        <form id="f_chapter" class="e-hidden">
            <label for="i_cap_num" class="" >N. Capítulo:</label>
            <input type="text" name="i_cap_num" id="i_cap_num" class="" 
                placeholder="Ingrese el número del Capítulo"/>

            <br>

            <label for="i_cap_title" class="" >Título:</label>
            <input type="text" name="i_cap_title" id="i_cap_title" class="" 
                placeholder="Ingrese el Título del Capítulo"/>

            <br>

            <input type="button" value="Registrar Capítulo" onclick="createChapter()">

            <br>

        </form>

    </body>
</html>