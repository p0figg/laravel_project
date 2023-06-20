<div class="border-bottom pb-3 mb-5">
    <div class=" mb-2">
    @isset($link)
        {{$link}}
    @endisset
    </div>
    <div class="d-flex justify-content-between">
        <div>
            <h1 class="h2 mb-2">
                {{$slot}}
            </h1>
        </div>
    @isset($right)
        <div>
            {{$right}}
        </div>
    @endisset
    </div>
</div>
