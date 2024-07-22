<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:dark leading-tight">
            {{ __('Lista de Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <TR>
                    <div class="mb-4">
                    <a href="{{ route('pacientes.create') }} " class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Crear Paciente</a>
                    </div>
                    </TR>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">NOMBRE</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">APELLIDO</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">FECHA NAC</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">DIRECCION</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">TELEFONO</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">CORREO</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">HISTORIAL MEDICO</th>
                            </tr>
                        </thead>
                        <tbody>
                </div>
                    </thead>
                    <tbody>
                        @foreach ($paciente as $pacientes)
                        <tr>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->id }}
                            </td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->name }}
                            </td>
                            <td  class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->last_name }}
                            </td >
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->birdathe }}
                            </td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->address }}
                            </td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->phone_number }}
                            </td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->email }}
                            </td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                {{ $paciente->medical_history }}
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // forma 1
    function confirmDelete(id) {
        alertify.confirm("¿Confirm delete record?",
        function(){
            let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/pacientes/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
            alertify.success('Ok');
        },
        function(){
            alertify.error('Cancel');
        });
    }

// forma 2
/* function confirmDelete(id) {
    alertify.confirm("¿Confirm delete record?", function (e) {
        if (e) {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/students/' + id;
            form.innerHTML = '@csrf @method("DELETE")';
            document.body.appendChild(form);
            form.submit();
        } else {
            alertify.error('Cancel');
            return false;
        }
    });
} */
</script>