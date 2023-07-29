<div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    {{ $attributes }}>
    <ul
    class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
    role="tablist"
    data-te-nav-ref>
    @if(isset($navPage))
        {{$navPage}}
    
    @endif
    </ul>

<!--Tabs content-->
    <div class="mb-6">
        @if (isset($teacher))
                {{ $teacher }}
                @endif

        @if (isset($student))
                {{ $student }}
                @endif
         
        @if (isset($semester))
                {{ $semester }}
                @endif
       
        @if (isset($courses))
                {{ $courses }}
                @endif
         
        
        @if (isset($department))
                {{ $department }}
                @endif
        
        
        @if (isset($class))
                {{ $class }}
                @endif
         
    </div>
  </div>