<?

        $db_hostname = "localhost";
                $db_username = "root";
                $db_password = "";        
                $db_name = "shiraz_db";
                
                $employee_id = $_POST['employee_id'];
                $employee_name = $_POST['employee_name'];
                $employee_phone = $_POST['employee_phone'];
                $house_number = $_POST['house_number'];
                $employee_street = $_POST['employee_street'];
                $employee_area = $_POST['employee_area'];
                $employee_city = $_POST['employee_city'];
                $employee_sal = $_POST['employee_sal'];
                $employee_com = $_POST['employee_com'];
                $employee_hiredate = $_POST['employee_hiredate'];
                $employee_man = $_POST['employee_man'];
                $employee_out = $_POST['employee_out'];
                $employee_dept = $_POST['employee_dept'];
                $emp_id = $_POST['empl_dept']
				
                $update_name = $_POST['EMP_ID'];
                $update_idi = $_POST['EMP_NAME'];
                $update_label = $_POST['up_label'];
                
                $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

                if(!$link)
                {
                        die("Connection Failed : " . mysqli_error($link) );
                }
                
                if(isset( $_POST['insert_btn'] ) )
                {
                        
                $sql = "INSERT INTO emp (EMP_ID, EMP_NAME,EMP_PHONE,EMP_EMAIL,EMP_HOUSE,EMP_STREET,EMP_CITY,EMP_SALARY, EMP_COMM, HIREDATE , MANAGER_ID , OUTLET_ID , DEPARTMENT_ID) 
                        VALUES ('$employee_id',' $employee_name',' $employee_phone','$house_number',' $employee_street','$employee_area',' $employee_city','$employee_sal','$employee_com','$employee_hiredate', '$employee_man','$employee_out','$employee_dept')";

                $result = mysqli_query($link, $sql);

                if(!$result)
                {
                        die("Query failed: " . mysqli_error($link) );
                }
                else
                {
                        echo "Data saved";
                }
			}
                
			
	




?>