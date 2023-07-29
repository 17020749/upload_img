<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Phân quyền') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
         <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <div class="p-2">
                <x-btn-insert
                data-hs-overlay="#modal-insert-user"
                >
                </x-btn-insert>
                <x-btn-role
                data-hs-overlay="#hs-medium-modal"
                >
                </x-btn-role>
                </div>
                <table class="min-w-full text-left text-sm font-light">
                  <thead
                    class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                      <tr>
                        <th scope="col" class="px-6 py-4">STT</th>
                        <th scope="col" class="px-6 py-4">User</th>
                        <th scope="col" class="px-6 py-4">Action</th>
                      </tr>
                  </thead>
                  <tbody id="listUser">
                  </tbody>
                </table>
                <!-- modal -->
                <div>
                    <x-modal-insert-user>
                    </x-modal-insert-user>
                    <x-modal-edit-user>
                    </x-modal-edit-user>
                    <x-modal-delete>
                      Xóa user
                    </x-modal-delete>
                    <x-modal-role-page-permission :data="$data">
                    </x-modal-role-page-permission>
                  </div>
              </div>
            </div>
          </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
  var token = '{{ session("token") }}';
  getListUser();
async function getListUser() {
  var html=``;
  try {
    const response = await $.ajax({
      url: '/api/user',
      method: 'GET',
      headers: {
        'Authorization': 'Bearer ' + token
      }
    });
      response.data.forEach(element => {
               html+=`<tr
                  class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">${element.id}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.email}</td>
                  <td class="whitespace-nowrap px-6 py-4">
                    <x-btn-edit
                    @click="$dispatch('edit-role', {id:'${element.id}', role:'${element.role}'})"
                    data-hs-overlay="#modal-edit-user" >
                    </x-btn-edit>
                    <x-btn-delete
                    @click="$dispatch('model-delete', {id:'${element.id}', email:'${element.name}', name:'${element.email}'})"
                    data-hs-overlay="#modal-delete-user" >
                    </x-btn-delete>
                  </td>
                </tr>`
      });
      document.getElementById('listUser').innerHTML= html;
    console.log('User data:', response.data);
      
  } catch (error) {
     if (error.responseJSON && error.responseJSON.message) {
      console.error('Error insert user:', error.responseJSON.message);
      toastr.error(error.responseJSON.message);
    } else {
      console.error('Error insert user:', error);
    }
    console.error('Error getting user data', error);
  }
}
  function getSanctumToken() {
  const cookies = document.cookie.split(';');
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();
    if (cookie.startsWith('XSRF-TOKEN=')) {
      const token = cookie.substring('XSRF-TOKEN='.length, cookie.length);
      return token;
    }
  }
  return null;
}
</script>