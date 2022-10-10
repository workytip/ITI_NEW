class Account{
    Ac_no:number;
    Balance:number;
    debitAmount() {}
    creditAmount() {}
    getbalance() {}

}

interface IAccount{
    dateofOpening:any;  
    AddCustomer() ;
    RemoveCustomer() ;
 

}

class Saving_Account extends Account implements IAccount{
    insertrate:any;
    dateofOpening:any;  
    AddCustomer(){} ;
    RemoveCustomer(){} ;
    
}

class Current_Account extends Account implements IAccount{
    min_balance:any;
    dateofOpening:any;  
    AddCustomer(){} ;
    RemoveCustomer(){} ;
    
}



