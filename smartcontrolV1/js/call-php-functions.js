function aleraCondominio(name, id) {
    $.post("./source/Controle/RetornaCondominio.php", { name: $(name).val(), id: id }, function() {
        window.location.href = "painel.php";
        // $('body').html(data)
    });
}