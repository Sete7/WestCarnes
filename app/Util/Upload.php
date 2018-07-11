<?php

/*
 * Responsavel por executar upload de imagens
 *
 *
 * @author Telmo
 */
require_once 'Helper.php';

class Upload {

    private $Arquivo;
    private $Name;
    private $Send;

    /* IMAGEM UPLOAD */
    private $Largura;
    private $Image;
    private $Result;
    private $Error;

    /* DIRETORIOS */
    private $Pasta;
    private static $BaseDir;
    
    /**
     * Verifica e cria o diretório padrão de uploads no sistema!<br>
     * <b>../upload/</b>
     */
    public function __construct($BaseDir = null) {
        self::$BaseDir = ((string) $BaseDir ? $BaseDir : '../upload/');
        //não pode existir arquivo e não pode existir diritório
        if (!file_exists(self::$BaseDir) && !is_dir(self::$BaseDir)) {
            mkdir(self::$BaseDir, 0777);
        }
    }
    
     /**
     * <b>Enviar Imagem:</b> Basta envelopar um $_FILES de uma imagem e caso queira um nome e uma largura personalizada.
     * Caso não informe a largura será 1024!
     * @param FILES $Image = Enviar envelope de $_FILES (JPG ou PNG)
     * @param STRING $Name = Nome da imagems ( ou do artigo )
     * @param INT $Largura = Largura da imagem ( 1024 padrão )
     * @param STRING $Pasta = Pasta personalizada
     */
    public function Image(array $Image, $Name = null, $Largura = null, $Pasta = null) {
        $this->Arquivo = $Image;
        $this->Name = ( (string) $Name ? $Name : substr($Image['name'], 0, strrpos($Image['name'], '.')) );
        //$this->Name = ((string) $Name ? $Name : substr($Image['name'], 0, strrpos($Image['name'], '.')));
        $this->Largura = ((int) $Largura ? $Largura : 1024);
        $this->Pasta = ((string) $Pasta ? $Pasta : 'images');

        $this->CheckPasta($this->Pasta);
        $this->setArquivoName();
        $this->UploadImage();
    }

    /**
     * <b>Verificar Upload:</b> Executando um getResult é possível verificar se o Upload foi executado ou não. Retorna
     * uma string com o caminho e nome do arquivo ou FALSE.
     * @return STRING  = Caminho e Nome do arquivo ou False
     */
    public function getResult() {
        return $this->Result;
    }

    /**
     * <b>Obter Erro:</b> Retorna um array associativo com um code, um title, um erro e um tipo.
     * @return ARRAY $Error = Array associatico com o erro
     */
    public function getError() {
        return $this->Error;
    }

     //Verifica e cria o diretório base!
    public function CriarPasta($Pasta) {
        if (!file_exists(self::$BaseDir . $Pasta) && !is_dir(self::$BaseDir . $Pasta)) {
            mkdir(self::$BaseDir . $Pasta, 0777);
        }
    }

    //Verifica e cria os diretórios com base em tipo de arquivo, ano e mês!
    public function CheckPasta($Pasta) {
        list($y, $m) = explode('/', date('Y/m'));
        $this->CriarPasta("{$Pasta}");
        $this->CriarPasta("{$Pasta}/{$y}");
        $this->CriarPasta("{$Pasta}/{$y}/{$m}/");
        $this->Send = ("{$Pasta}/{$y}/{$m}/");
    }
    
    //Verifica e monta o nome dos arquivos tratando a string!
    public function setArquivoName() {
        $NomeArquivo = Helper::Name($this->Name) . strrchr($this->Arquivo['name'], '.');

        if (file_exists(self::$BaseDir . $this->Send . $NomeArquivo)) {
            $NomeArquivo = Helper::Name($this->Name) . '-' . time() . strrchr($this->Arquivo['name'], '.');
            
        }
        $this->Name = $NomeArquivo;
    }
    
    //Realiza o upload de imagens redimensionando a mesma!

    private function UploadImage() {
        switch ($this->Arquivo['type']):
            case 'image/jpg':
            case 'image/jpeg':
            case 'image/pjpeg':
                $this->Image = imagecreatefromjpeg($this->Arquivo['tmp_name']);
                break;

            case 'image/png':
            case 'image/x-png':
                $this->Image = imagecreatefrompng($this->Arquivo['tmp_name']);
                break;
        endswitch;

        if (!$this->Image) {
            $this->Result = false;
            $this->Error = 'Tipo de arquivo inválido, envie imagens JPG ou PNG';
        } else {
            $x = imagesx($this->Image);
            $y = imagesy($this->Image);
            $ImageX = ($this->Largura < $x ? $this->Largura : $x);
            $ImageH = ($ImageX * $y) / $x;

            $NovaImagem = imagecreatetruecolor($ImageX, $ImageH);
            imagealphablending($NovaImagem, false);
            imagesavealpha($NovaImagem, true);
            imagecopyresampled($NovaImagem, $this->Image, 0, 0, 0, 0, $ImageX, $ImageH, $x, $y);

            switch ($this->Arquivo['type']):
                case 'image/jpg':
                case 'image/jpeg':
                case 'image/pjpeg':
                    imagejpeg($NovaImagem, self::$BaseDir . $this->Send . $this->Name);
                    break;

                case 'image/png':
                case 'image/x-png':
                    imagepng($NovaImagem, self::$BaseDir . $this->Send . $this->Name);
                    break;
            endswitch;

            if (!$NovaImagem):
                $this->Result = false;
                $this->Error = 'Tipo de arquivo inválido, envie imagens JPG ou PNG';
            else:
                $this->Result = $this->Send . $this->Name;
                $this->Error = null;
            endif;
            
            imagedestroy($this->Image);
            imagedestroy($NovaImagem);
        }
    }

}
