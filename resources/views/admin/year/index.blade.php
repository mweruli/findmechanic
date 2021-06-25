
 @extends('layouts.backend.app') 
 @section('content')
 
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <div class="container-full">
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="d-flex align-items-center">
                 <div class="mr-auto">
                     <h3 class="page-title">Data Tables</h3>
                     <div class="d-inline-block align-items-center">
                         <nav>
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                 <li class="breadcrumb-item" aria-current="page">Tables</li>
                                 <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
 
         <!-- Main content -->
         <section class="content">
           <div class="row">
 
             <div class="col-12">
 
              
               <!-- /.box -->
 
               <div class="box">
                 <div class="box-header with-border">
                     <a  class="btn btn-outline btn-rounded btn-primary mb-5" href="{{ route('admin.year.create') }}">Create Car Year</a>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                     <div class="table-responsive">
                       <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>Car Type</th>
                                 <th>Car Year</th>
                                 <th>Created At</th>
                                 <th>Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                          @foreach ($years as $key=>$year)
                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $year->makes->name }}</td>
                            <td>{{ $year->year }}</td>
                            <td>{{ $year->created_at }}</td>
                            <td>
                              <a href="{{ route('admin.year.edit', $year->id) }}" class="btn btn-info btn-flat mb-5"><i class="fa fa-pencil"></i></a>
                              <button class="btn btn-danger btn-flat mb-5" onclick="deleteYear({{ $year->id }})"><i class="fa fa-trash"></i></button>
                              <form id="delete-form-{{ $year->id }}" action="{{ route('admin.year.destroy', $year->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                              </form>
                            </td>
                          </tr>
                          @endforeach
                      
                        </tbody>				  
                         <tfoot>
                             <tr>
                                 <th>ID</th>
                                 <th>Car Type</th>
                                 <th>Car Year</th>
                                 <th>Created At</th>
                                 <th>Actions</th>
                             </tr>
                         </tfoot>
                     </table>
                     </div>              
                 </div>
                 <!-- /.box-body -->
               </div>
               <!-- /.box -->          
             </div>
             <!-- /.col -->
           </div>
           <!-- /.row -->
         </section>
 
         
         <!-- /.content -->
       
       </div>
   </div>
  
   <!-- /.content-wrapper -->
   
    <footer class="main-footer">
     <div class="pull-right d-none d-sm-inline-block">
         <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
           <li class="nav-item">
             <a class="nav-link" href="javascript:void(0)">FAQ</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Purchase Now</a>
           </li>
         </ul>
     </div>
       &copy; 2020 <a href="#">Psd to Html Expert</a>. All Rights Reserved.
   </footer>
   <!-- Control Sidebar -->
  @endsection
 
  @push('js')
 
  <script type="text/javascript">
 function deleteMake(id){
 const swalWithBootstrapButtons = Swal.mixin({
 customClass: {
 confirmButton: 'btn btn-success',
 cancelButton: 'btn btn-danger'
 },
 buttonsStyling: false
 })
 
 swalWithBootstrapButtons.fire({
 title: 'Are you sure?',
 text: "You won't be able to revert this!",
 icon: 'warning',
 showCancelButton: true,
 confirmButtonText: 'Yes, delete it!',
 cancelButtonText: 'No, cancel!',
 reverseButtons: true
 }).then((result) => {
  if (result.value) {
                 event.preventDefault();
                 document.getElementById('delete-form-'+id).submit();
             } else if (
                 // Read more about handling dismissals
                 result.dismiss === swal.DismissReason.cancel
             ) {
                 swal(
                     'Cancelled',
                     'Your data is safe :)',
                     'error'
                 )
             }
         })
     }
 
 </script>
 @endpush