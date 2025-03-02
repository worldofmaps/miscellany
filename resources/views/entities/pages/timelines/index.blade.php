<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\TimelineElement $element
 */?>
@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => __('entities/timelines.show.title', ['name' => $entity->name]),
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($entity->pluralType()), 'label' => __($entity->pluralType() . '.index.title')],
        ['url' => $entity->url('show'), 'label' => $entity->name],
        __('crud.tabs.timelines')
    ],
    'canonical' => true,
    'mainTitle' => false,
    'miscModel' => $entity->child,
    'bodyClass' => 'entity-timelines'
])
@inject('campaign', 'App\Services\CampaignService')

@section('content')
    @include('partials.errors')
    <div class="row entity-grid">
        <div class="col-md-2 entity-sidebar-submenu">
            @include($entity->pluralType() . '._menu', ['active' => 'timelines', 'model' => $entity->child, 'name' => $entity->pluralType()])
        </div>
        <div class="col-md-10">
            <div class="box box-solid box-entity-timelines" id="entity-timelines">
                <div class="box-body">
                    <h2 class="page-header with-border">
                        {{ __('crud.tabs.timelines') }}
                    </h2>

                    <p class="help-block export-hidden">
                        {{ __('entities/timelines.helper') }}
                    </p>

                        @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#entity-timelines'])


                    <table id="entity_timelines" class="table table-hover {{ ($timelines->count() === 0 ? 'export-hidden' : '') }}">
                        <thead>
                        <tr>
                            <th class="avatar"><br></th>
                            <th>
                                {{ __('entities.timeline') }}
                            </th>
                            <th>
                                {{ __('timelines/elements.fields.era') }}
                            </th>
                            <th>
                                {{ __('timelines/elements.fields.date') }}
                            </th>
                            @if (Auth::check())
                                <th>
                                    {{ __('crud.fields.visibility') }}
                                </th>
                            @endif
                            <th class="text-right">
                                <br />
                            </th>
                        </tr>
                        </thead>
                        <tbody>
@foreach ($timelines as $element)
    @if (empty($element->entity->child))
       @continue
    @endif
                        <tr>
                            <td>
                                <a class="entity-image" style="background-image: url('{{ $element->timeline->getImageUrl(40) }}');" title="{{ $element->timeline->name }}" href="{{ $element->timeline->getLink() }}"></a>
                            </td>
                            <td class="breakable">
                                {!! $element->timeline->tooltipedLink() !!}
                            </td>
                            <td class="breakable">
                                <a href="{{ route('timelines.show', [$element->timeline_id, '#era'. $element->era_id]) }}">
                                    {{ $element->era->name }}
                                </a>
                            </td>
                            <td class="breakable">
                                <a href="{{ route('timelines.show', [$element->timeline_id, '#element' . $element->id]) }}">
                                    {{ $element->date }}
                                <a/>
                            </td>
                            @if (Auth::check())
                                <td>
                                    @include('cruds.partials.visibility', ['model' => $element])
                                </td>
                            @endif
                            <td class="text-right">

                            </td>
                        </tr>
@endforeach
                        </tbody>
                    </table>

                    {{ $timelines->fragment('entity-timelines')->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

