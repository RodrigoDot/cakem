$(document).ready(function() {

    let counter = 1;
    
    function addNewAdress() {
        console.log('funcao OK');
        
        //let $content = $('#endereco').html();
        //console.log($content);
        
        let content = '<fildset id="' + counter++ + '">' +
                    '<label>Endereco ' + counter + '</label>' +
                    '<div class="form-group text"><label for="cep">Cep</label><input type="text" name="cep" id="cep" maxlength="9" class="form-control" value=""></div>' +
                    '<div class="form-group text"><label for="rua">Rua</label><input type="text" name="rua" id="rua" class="form-control"></div>' +
                    '<div class="form-group number"><label for="numero">Numero</label><input type="number" name="numero" id="numero" class="form-control"></div>' +
                    '<div class="form-group text"><label for="bairro">Bairro</label><input type="text" name="bairo" id="bairro" class="form-control"></div>' +
                    '<div class="form-group text"><label for="cidade">Cidade</label><input type="text" name="cidade" id="cidade" class="form-control"></div>' +
                    '<div class="form-group text"><label for="uf">Uf</label><input type="text" name="uf" id="uf" class="form-control"></div>' +
                    '<div class="form-group text"><label for="ibge">Ibge</label><input type="text" name="ibge" id="ibge" class="form-control"></div>' +
                    '</fieldset>';
        
        
        let newAdress = content; 
        
        $('#endereco').append(newAdress);
    }
    
    $('#newAdress').click(addNewAdress);
    
});
