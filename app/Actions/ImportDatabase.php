<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class ImportDatabase
{
    use AsAction;
    private array $inserts;
    public string $commandSignature = "database:populate";

    public function __construct()
    {
        $this->inserts = [
            "comentarios" => "INSERT INTO `rockumweb_nuevo`.`comentarios` (`id`, `artista`, `cancion`, `nombre`, `pais`, `mail`, `comentario`, `fecha_number`, `publico`) SELECT `comentarios`.`idc`, `comentarios`.`artista`, `comentarios`.`cancion`, `comentarios`.`nombre`, `comentarios`.`pais`, `comentarios`.`mail`, `comentarios`.`comentario`, `comentarios`.`fecha`, `comentarios`.`publico` FROM `rockumweb_original`.`comentarios`;",
            "entrevistas" => "INSERT INTO `rockumweb_nuevo`.`entrevistas` (`id`, `titulo`, `titulo_intro`, `texto`, `imagen`, `titulo_eng`, `titulo_intro_eng`, `texto_eng`, `fecha_number`) SELECT `entrevistas`.`entrevista_id`, `entrevistas`.`titulo`, `entrevistas`.`titulo_intro`, `entrevistas`.`texto`, `entrevistas`.`imagen`, `entrevistas`.`titulo_eng`, `entrevistas`.`titulo_intro_eng`, `entrevistas`.`texto_eng`, `entrevistas`.`fecha` FROM `rockumweb_original`.`entrevistas`;",
            "eternal" => "INSERT INTO `rockumweb_nuevo`.`eternal` (`id`, `artista`, `imagen`, `fechabd`, `bandas`, `texto`, `fecha_number`, `video`) SELECT `eternal`.`eternal_id`, `eternal`.`artista`, `eternal`.`imagen`, `eternal`.`fechabd`, `eternal`.`bandas`, `eternal`.`texto`, `eternal`.`fecha`, `eternal`.`video` FROM `rockumweb_original`.`eternal`",
            "listeners" => "INSERT INTO `rockumweb_nuevo`.`listeners` (`id`, `fecha`, `num`) SELECT `listeners`.`id`, `listeners`.`fecha`, `listeners`.`num` FROM `rockumweb_original`.`listeners`;",
            "memorabilia" => "INSERT INTO `rockumweb_nuevo`.`memorabilia` (`fecha`) SELECT `memorabilia`.`fecha` FROM `rockumweb_original`.`memorabilia`;",
            "mp3info" => "INSERT INTO `rockumweb_nuevo`.`mp3info` (`id`, `artista`, `titulo`, `ano`, `imagen`, `album`, `review`, `op1`, `op2`, `op3`, `op4`, `op5`, `total`) SELECT `mp3info`.`id`, `mp3info`.`artista`, `mp3info`.`titulo`, `mp3info`.`ano`, `mp3info`.`imagen`, `mp3info`.`album`, `mp3info`.`review`, `mp3info`.`op1`, `mp3info`.`op2`, `mp3info`.`op3`, `mp3info`.`op4`, `mp3info`.`op5`, `mp3info`.`total` FROM `rockumweb_original`.`mp3info`;",
            "multimedia" => "INSERT INTO `rockumweb_nuevo`.`multimedia` (`id`, `banda`, `video`, `imagen`, `enlace`) SELECT `multimedia`.`multimedia_id`, `multimedia`.`banda`, `multimedia`.`video`, `multimedia`.`imagen`, `multimedia`.`enlace` FROM `rockumweb_original`.`multimedia`;",
            "noticias" => "INSERT INTO `rockumweb_nuevo`.`noticias` (`id`, `titulo`, `texto`, `fecha_number`, `imagen`, `titulo_intro`, `video`, `website`) SELECT `noticias`.`noticia_id`, `noticias`.`titulo`, `noticias`.`texto`, `noticias`.`fecha`, `noticias`.`imagen`, `noticias`.`titulo_intro`, `noticias`.`video`, `noticias`.`website` FROM `rockumweb_original`.`noticias`;",
            "ondemand" => "INSERT INTO `rockumweb_nuevo`.`ondemand` (`id`, `artista`, `cancion`, `enlace`, `imagen`, `review`, `fecha_number`) SELECT `ondemand`.`od_id`, `ondemand`.`artista`, `ondemand`.`cancion`, `ondemand`.`enlace`, `ondemand`.`imagen`, `ondemand`.`review`, `ondemand`.`fecha` FROM `rockumweb_original`.`ondemand`;",
            "programas" => "INSERT INTO `rockumweb_nuevo`.`programas` (`id`, `nombre`, `tamano`, `fecha_string`, `imagen`, `enlace`) SELECT `programas`.`programa_id`, `programas`.`nombre`, `programas`.`tamano`, `programas`.`fechap`, `programas`.`imagen`, `programas`.`enlace` FROM `rockumweb_original`.`programas`;",
            "publicidad" => "INSERT INTO `rockumweb_nuevo`.`publicidad` (`publicidad_id`, `grupo`, `url`, `imagen`, `alt`, `ancho`, `alto`) SELECT `publicidad`.`publicidad_id`, `publicidad`.`grupo`, `publicidad`.`url`, `publicidad`.`imagen`, `publicidad`.`alt`, `publicidad`.`ancho`, `publicidad`.`alto` FROM `rockumweb_original`.`publicidad`;",
            "records" => "INSERT INTO `rockumweb_nuevo`.`records` (`id`, `caratula`, `album`, `banda`, `condicion`, `codigo`, `lanzamiento`, `comprar`, `formato`, `paypal`, `precio`) SELECT `records`.`record_id`,`records`.`caratula`,`records`.`album`,`records`.`banda`,`records`.`condicion`,`records`.`codigo`,`records`.`lanzamiento`,`records`.`comprar`,`records`.`Formato`,`records`.`paypal`,`records`.`precio` FROM `rockumweb_original`.`records`",
            "reportajes" => "INSERT INTO `rockumweb_nuevo`.`reportajes` (`id`, `titulo`, `imagen`, `imagen2`, `website`, `texto`, `fecha_numero`, `video`) SELECT `reportajes`.`reportaje_id`, `reportajes`.`titulo`, `reportajes`.`imagen`, `reportajes`.`imagen2`, `reportajes`.`website`, `reportajes`.`texto`, `reportajes`.`fecha`, `reportajes`.`video` FROM `rockumweb_original`.`reportajes`;",
            "request" => "INSERT INTO `rockumweb_nuevo`.`request` (`id`, `nombre`, `mail`, `artista`, `cancion`, `fecha_numero`) SELECT `request`.`idr`, `request`.`nombre`, `request`.`mail`, `request`.`artista`, `request`.`cancion`, `request`.`fecha` FROM `rockumweb_original`.`request`;",
            "reviews" => "INSERT INTO `rockumweb_nuevo`.`reviews` (`id`, `banda`, `album`, `imagen`, `buy`, `imagenbanda`, `texto`, `textoingles`, `pais`, `integrantes`, `calificacion`, `video`, `detalles`, `tracklist`, `fecha_numero`, `lanzamiento`, `genero`, `tiempo`, `sello`, `productor`, `produccion`, `formato`, `codigo`) SELECT `reviews`.`review_id`, `reviews`.`banda`, `reviews`.`album`, `reviews`.`imagen`, `reviews`.`buy`, `reviews`.`imagenbanda`, `reviews`.`texto`, `reviews`.`textoingles`, `reviews`.`pais`, `reviews`.`integrantes`, `reviews`.`calificacion`, `reviews`.`video`, `reviews`.`detalles`, `reviews`.`tracklist`, `reviews`.`fecha`, `reviews`.`lanzamiento`, `reviews`.`genero`, `reviews`.`tiempo`, `reviews`.`sello`, `reviews`.`productor`, `reviews`.`produccion`, `reviews`.`formato`, `reviews`.`codigo` FROM `rockumweb_original`.`reviews`;",
            "temp" => "INSERT INTO `rockumweb_nuevo`.`temp` (`id`, `artista`, `cancion`, `op1`, `op2`, `op3`, `op4`, `op5`, `total`) SELECT `temp`.`id`, `temp`.`artista`, `temp`.`cancion`, `temp`.`op1`, `temp`.`op2`, `temp`.`op3`, `temp`.`op4`, `temp`.`op5`, `temp`.`total` FROM `rockumweb_original`.`temp`;",
            "videos" => "INSERT INTO `rockumweb_nuevo`.`videos` (`id`, `titulo`, `titulo_intro`, `imagen`, `texto`, `video`) SELECT `videos`.`video_id`, `videos`.`titulo`, `videos`.`titulo_intro`, `videos`.`imagen`, `videos`.`texto`, `videos`.`video` FROM `rockumweb_original`.`videos`;",
        ];
    }
    public function handle($table)
    {
        DB::statement($this->inserts[$table]);
        return $table;
    }
    public function asCommand($command): void
    {
        foreach ($this->inserts as $key => $insert) {
            $table = $this->handle($key);
            $command->info($table . ' successfully imported.');
        }
    }
}
