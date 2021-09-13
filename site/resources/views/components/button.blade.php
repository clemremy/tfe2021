<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}
    style="display: inline-block;
	cursor: pointer;
	color: #ffffff;
    text-transform: uppercase;
    font-size: 0.75em;
    text-align: center;
    letter-spacing: 2px;
	padding:10px 20px;
    border: 2px solid #CBD5CC;
    background: #CBD5CC;
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    border-radius:0;
    z-index:1;"
    >
    {{ $slot }}
</button>
