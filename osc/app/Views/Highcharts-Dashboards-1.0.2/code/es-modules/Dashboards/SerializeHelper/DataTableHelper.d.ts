import type JSON from '../JSON';
import DataTable from '../../Data/DataTable.js';
import Serializable from '../Serializable.js';
declare namespace DataTableHelper {
    type ColumnJSON = JSON.Array<JSON.Primitive>;
    type JSON = (Serializable.JSON<'Data.DataTable'> & DataTable.Options);
}
declare const DataTableHelper: Serializable.Helper<DataTable, DataTableHelper.JSON>;
export default DataTableHelper;
