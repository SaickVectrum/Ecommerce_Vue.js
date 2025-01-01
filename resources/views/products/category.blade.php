<x-app title="Categoria">
    <section class="container">
        <product-category :products="{{ json_encode($products) }}"></product-category>
    </section>
</x-app>
