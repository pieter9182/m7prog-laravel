<x-master-layout>
    <section>
        @foreach( $projects as $project )
            <div
                class="max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                    {{$project->title}}
                </h5>
                bla
            </div>
        @endforeach 
    </section>
    @section('scripts')
        <script>
            console.log(" ik geef op");
        </script>
    @endsection
</x-master-layout>