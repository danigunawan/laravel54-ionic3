<?php
$tabs = [
    [
      'title' => 'Informações',
      'link' => !isset($video)?route('admin.videos.create'):route('admin.videos.edit', ['video' => $video->id])
    ],
    [
        'title' => 'Série e categorias',
        'link' => !isset($video)?'#':route('admin.videos.relations.create', ['video' => $video->id]),
        'disabled' => !isset($video)?true:false
    ],
    [
        'title' => 'Video e thumbnail',
        'link' => '',
        'disabled' => !isset($video)?true:false
    ]
];
?>
<h3>Gerencia video</h3>
<div class="text-right">
    {!! Button::link('Listar vídeos')->asLinkTo(route('admin.videos.index')) !!}
</div>
{!! Navigation::tabs($tabs) !!}
<div>
    {!! $slot !!}
</div>