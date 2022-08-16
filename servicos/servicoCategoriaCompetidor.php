<?php



function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
$categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemSucesso();
        if($idade >= 6 && $idade <= 12) 
{
                for ($i = 0; $i <= count($categorias); $i++)
            {
                    if ($categorias[$i]=='infantil')
            
                    setarMensagemErro(mensagem: "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                        
                        return null;
                }
            }
            else if ($idade >= 13 && $idade <= 18 )
            {
                for ($i = 0; $i <= count($categorias); $i++)
            {
                    if ($categorias[$i] == 'adolescente')

                    setarMensagemErro(mensagem: "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    
                        return null;

                }
            }
            else if ($idade >= 18 && $idade <= 60 )
            {
                for ($i = 0; $i <= count($categorias); $i++)
            {
                    if ($categorias[$i] == 'adulto')
                
                    setarMensagemErro(mensagem:"O nadador ".$nome." compete na categoria ".$categorias[$i]);
                        
                        return null;
                }
            } 
            else 
            {
                for ($i = 0; $i <= count($categorias); $i++)
                {
                    if ($categorias[$i] == 'idoso')
                    
                    setarMensagemErro(mensagem:"O nadador ".$nome." compete na categoria ".$categorias[$i]);
                        
                        return null; 
                }
            }
    }
    else
    {
        obterMensagemSucesso();
        return obterMensagemErro();
    }



}