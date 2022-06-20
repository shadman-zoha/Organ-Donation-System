@extends("MainPage")
@section('content')


    <link rel="stylesheet" href="./assets/styles.css">
    <form action="{{ url('message') }}" method="POST">
        @csrf
        

        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-app">

                        <div class="p-4 flex flex-col">
                            <P style="color:red; text-align:center; " ><b>Any problem or need that you can contact us. We will contact you by email or phone within 5 working days.</b></P>
                        </div>



                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">


                            </div>
                        </div>
                        <div class="chat-history">
                            <ul class="m-b-0">

                                @foreach ($data as $key)
                                    <li class="clearfix">


                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="name"
                                            type="text" required="" value="{{ $key->message }}" disabled
                                            aria-label="Name">
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="">

                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="message" type="text"
                                required="" placeholder="Enter here" aria-label="Name" >
                        </div>
                        <div class="mt-4">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                type="submit">Send Message</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
