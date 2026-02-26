@php
    $key = $getKey();
@endphp

<div
    x-data="{
        data: null,
        postcode: null,
        async loadData() {
            this.data = await $wire.callSchemaComponentMethod(
                @js($key),
                'postcodeLookup',
                { postcode: this.postcode },
            )
        },
    }"
    x-init="loadData"
>
    <input type="text" x-model="postcode" x-on:change="loadData" />

    <template x-if="data">
        <div><pre x-text="JSON.stringify(data, null, 2)"></pre></div>
    </template>

</div>