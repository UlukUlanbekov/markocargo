<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="height: 80vh">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="user-card" style="color: black;">
                                <h3>{{ $user->name }}</h3>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>Phone:</strong> {{ $user->phone  }}</p>

                                <div class="padding-15">
                                    <p>CODE: {{ $user->getCode() }}</p>
                                    <button class="copy-btn" data-copy="CODE: {{ $user->getCode()  }}">Скопировать код</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="user-card" style="color: black;">
                                <p>地址：广东省广州市白云区松洲街道西槎路聚龙大街45号一楼9588库BC3102-{{ $user->getCode() }}</p>
                                <p>电话：13539401958</p>
                                <p>邮编：510000</p>
                                <div class="padding-15">
                                    <button class="copy-btn" data-copy="地址：广东省广州市白云区松洲街道西槎路聚龙大街45号一楼9588库BC3102-{{ $user->getCode() }} 电话：13539401958 邮编：510000">Скопировать код</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 text-gray-900">
                    <div class="padding-15">
                        <p>地址：广东省广州市白云区松洲街道西槎路聚龙大街45号一楼9588库BC3102-{{ $user->getCode() }}</p>
                        <button class="copy-btn" data-copy="地址：广东省广州市白云区松洲街道西槎路聚龙大街45号一楼9588库BC3102-{{ $user->getCode() }}">Copy</button>
                    </div>
                    <hr>
                    <div class="padding-15">
                        <p>电话：13539401958</p>
                        <button class="copy-btn" data-copy="电话：13539401958">Copy</button>
                    </div>
                    <hr>
                    <div class="padding-15">
                        <p>邮编：510000</p>
                        <button class="copy-btn" data-copy="邮编：510000">Copy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast">Скопировано!</div>


    <script>
        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', () => {
                const textToCopy = button.getAttribute('data-copy');
                navigator.clipboard.writeText(textToCopy).then(() => {
                    const toast = document.querySelector('.toast');
                    toast.classList.add('show');
                    setTimeout(() => {
                        toast.classList.remove('show');
                    }, 3000);
                }).catch(err => {
                    console.error('Could not copy text: ', err);
                });
            });
        });
    </script>
</x-app-layout>
