<el-dialog id="modal-{{ $product->id }}" class="hidden fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent z-100">
    <div class="fixed inset-0 bg-black/40 backdrop-blur-sm transition-opacity" command="close" commandfor="modal-{{ $product->id }}"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center">
        <el-dialog-panel class="relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all">

            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center justify-center bg-[#F8F8F8] p-8 md:p-12">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-auto max-h-112 object-contain transition-transform duration-500 hover:scale-105">
                </div>

                <div class="p-8 md:p-12 flex flex-col justify-center relative">
                    <button command="close" commandfor="modal-{{ $product->id }}" class="absolute top-6 right-6 text-gray-400 hover:text-black transition-colors focus:outline-none">
                        <img src="/images/icon/close.svg" alt="close button" class="w-6 h-6">
                    </button>

                    <div class="mb-2">
                        <h2 class="text-3xl font-bold leading-tight text-gray-900 font-playfair">{{ $product->name }}</h2>
                    </div>

                    <div class="mb-8">
                        <p class="text-2xl font-semibold text-[#E91E63]">
                            Rp{{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>

                    <div class="mb-8 border-t border-gray-100 pt-8">
                        <a href="{{ route('products.show', $product->id) }}" class="text-sm font-bold uppercase tracking-widest text-black underline hover:text-gray-600 transition-colors">
                            View Product Details
                        </a>
                    </div>

                    @auth
                    <form action="{{ route('cart.add') }}" method="POST" class="space-y-8" x-data="{ qty: 1 }">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="group relative w-full bg-[#FFE8CD] text-black py-4 px-8 rounded-xl font-bold overflow-hidden transition-all duration-300 hover:bg-[#FFD6BA] hover:text-white flex items-center justify-center space-x-3">
                            <svg class="w-5 h-5 transition-transform group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <span class="tracking-widest text-xs">Add to Cart</span>
                        </button>
                    </form>
                    @endauth
                </div>
            </div>

        </el-dialog-panel>
    </div>
</el-dialog>