<style type="text/css">
	label.error {
		display: inline-block;
		color:red;
	}
	</style>
<div id="modal-insert-user" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
  <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
     <form action="" id="formInsertUser">
  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
          Modal title
        </h3>
        <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-insert-user">
          <span class="sr-only">Close</span>
          <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
          </svg>
        </button>
      </div>
      <div class="p-4 overflow-y-auto">
       <!-- component -->
<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="mx-auto w-full max-w-[550px]">
   
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3">
          <div class="mb-5">
            <label
              for="Name"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              First Name
            </label>
            <input
              
            
              type="text"
              name="name"
              id="Name"
              placeholder="First Name"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label
              for="email"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Email
            </label>
            <input
              
              type="text"
              name="email"
              id="email"
              placeholder="Email"
              class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
           <div class="mb-5">
              <label for="roles" class="mb-3 block text-base font-medium text-[#07074D]">Nhóm quyền</label> 
              <select id="roles" name="roles" multiple="multiple" style="width: 100%" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                <option name="Admin" value="1">Admin</option> 
                <option name="TestTer" value="2">TestTer</option>
                <option name="Edit" value="3">Edit</option> 
                <option name="Post" value="4">Post</option>
              </select>
            </div>
        </div>
      </div>
      <div>
       
      </div>
   
  </div>
</div>
      </div>
      <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
         <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-insert-user">
        Close
        </button>
        <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-green-200 font-semibold text-green-500 hover:text-white hover:bg-green-500 hover:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        Save
        </button>
      </div>
    </div>
     </form>
  </div>
</div>
<script>


$(document).ready(function() {
 $('#roles').select2(
 );
 $.validator.addMethod("multiSelectRequired", function(value, element) {
      return value && value.length > 0;
    }, "Please select at least one role.");
	$("#formInsertUser").validate({
    onsubmit: true,
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			 name: "required",
    // compound rule
    email: {
      required: true,
      email: true
    },
    "roles": {
          multiSelectRequired: true
        }
  },
  messages: {
    name: "Name là bắt buộc",
    email: {
      required: "Email là bắt buộc",
      email: "Email phải nhập đúng định dạng như name@domain.com"
    },
   "roles": {
          multiSelectRequired: "Chọn ít nhất một nhóm quyền"
        }
  },
 
  submitHandler: function (form, event) {
      insertUser();
      event.preventDefault();
    },
	});
});
  async function insertUser() {
  try {
    const response = await $.ajax({
      url: `/api/user`,
      method: 'POST',
      data:{
        name:document.getElementById('Name').value,
        email:document.getElementById('email').value,
        role:  $("#roles").val()
      },
      headers: {
        'Authorization': 'Bearer ' + token
      }
    });
  getListUser()
  .then(() => {
     HSOverlay.close(document.getElementById('modal-insert-user'));
     toastr.success(response.message);
     
  })
  } catch (error) {
    if (error.responseJSON && error.responseJSON.message) {
      console.error('Error insert user:', error.responseJSON.message);
      toastr.error(error.responseJSON.message);
    } else {
      console.error('Error insert user:', error);
    }
  }
 
  
  }
</script>