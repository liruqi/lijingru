<?php
$this->breadcrumbs=array(
	'Verycds'=>array('index'),
	$model->title,
);

if (Yii::app()->user->name === "admin") {
$this->menu=array(
	array('label'=>'List Verycd', 'url'=>array('index')),
	array('label'=>'Create Verycd', 'url'=>array('create')),
	array('label'=>'Update Verycd', 'url'=>array('update', 'id'=>$model->verycdid)),
	array('label'=>'Delete Verycd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->verycdid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Verycd', 'url'=>array('admin')),
);
}

/**
 * Return human readable sizes
 *
 * @author      Aidan Lister <aidan@php.net>
 * @version     1.3.0
 * @link        http://aidanlister.com/2004/04/human-readable-file-sizes/
 * @param       int     $size        size in bytes
 * @param       string  $max         maximum unit
 * @param       string  $system      'si' for SI, 'bi' for binary prefixes
 * @param       string  $retstring   return string format
 */
function size_readable($size, $max = null, $system = 'si', $retstring = '%01.2f %s')
{
    // Pick units
    $systems['si']['prefix'] = array('B', 'K', 'MB', 'GB', 'TB', 'PB');
    $systems['si']['size']   = 1000;
    $systems['bi']['prefix'] = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB');
    $systems['bi']['size']   = 1024;
    $sys = isset($systems[$system]) ? $systems[$system] : $systems['si'];
 
    // Max unit to display
    $depth = count($sys['prefix']) - 1;
    if ($max && false !== $d = array_search($max, $sys['prefix'])) {
        $depth = $d;
    }
 
    // Loop
    $i = 0;
    while ($size >= $sys['size'] && $i < $depth) {
        $size /= $sys['size'];
        $i++;
    }
 
    return sprintf($retstring, $size, $sys['prefix'][$i]);
}
function emsize($ed2k) {
    $list = explode('|', $ed2k);
    if (count($list) < 4) return "Unknown";
    return size_readable($list[3]);
}
function emlink($ed2k, $id) {
    $name = 'topic'.$id;
    $links = explode("`", $ed2k);
    $i = 0;
    $template = '<tr class="ed2kitem">
                <td width="20"><input type="checkbox" checked="checked" value="%s" name="%s"/></td>
                <td width="640"><a ed2k="%s" href="%s">%s</a></td>
                <td width="100" name="%ssize">%s</td></tr>';
    $rtn = '';
    while ($i + 1 < count($links)) {
        if (substr($links[$i], 0, 4) === 'ed2k' and strstr($links[$i+1], 'ed2k://')) {
            $rtn .= sprintf($template, $links[$i], $name,$links[$i],$links[$i],$links[$i+2],$name,emsize($links[$i]));
            $i += 3;
        }
        else {
            $rtn .= sprintf($template, $links[$i], $name,$links[$i],$links[$i],$links[$i+1],$name,emsize($links[$i]));
            $i += 2;
        }
    }
    return $rtn;
}
?>

<h1>View Verycd #<?php echo $model->verycdid; ?></h1>

<table class="detail-view" id="yw0"><tr class="odd">
<th>资源ID</th><td><?php echo $model->verycdid; ?></td></tr>
<tr class="even"><th>标题</th><td><?php echo $model->title; ?></td></tr>
<tr class="odd"><th>状态</th><td><?php echo $model->status; ?> </td></tr>
<tr class="even"><th>简介</th><td><?php echo $model->brief; ?></td></tr>
<tr class="odd"><th>发布时间</th><td><?php echo $model->pubtime; ?></td></tr>
<tr class="even"><th>更新时间</th><td><?php echo $model->updtime; ?></td></tr>
<tr class="odd"><th>分类</th><td><?php echo $model->category1.", ".$model->category2; ?> </td></tr>

<tr class="even"><th>Ed2k</th><td>
    <table cellspacing="1" cellpadding="0" border="0" width="760" class="ed2kzone" align="center">
        <tbody>
        <tr class="ed2kheader"><td align="center" colspan="4">下面是用户共享的文件列表，推荐使用<a href="http://www.emule-project.net/home/perl/general.cgi?l=42&rm=download" target="_blank">eMule</a>进行下载，您可以点击这些文件名进行下载</td>
        </tr>
        <?php echo emlink($model->ed2k, $model->verycdid); ?>
        </tbody></table>
 </td></tr>
<tr class="odd"><th>Content</th><td><?php echo str_replace("\n",'<p/>',$model->content); ?> </td></tr>
</table>

