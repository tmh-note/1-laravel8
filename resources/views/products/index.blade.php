<x-layout title="Product List">
    <div class="container mt-5">
        <div class="col-md-12">
            <x-input type="email" name="email" />
            <x-input type="textt" name="name" />
            <x-input type="password" name="password" />
            <x-button.submit>Login</x-button.submit>
        </div>
        <div class="col-md-12">
            <x-card header="<h1>Product List</h1>" cardFooter="My footer">
                {{-- <h1>Product List</h1> --}}
                <ul>
                    <li>Product Name</li>
                    <li>Product Name</li>
                    <li>Product Name</li>
                    <li>Product Name</li>
                    <li>Product Name</li>
                </ul>
            </x-card>
            
        </div>
    </div>
</x-layout>