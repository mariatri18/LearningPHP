using System.Collections;
using System.Collections.Generic;
using TMPro;
using UnityEditor;
using UnityEditor.SceneManagement;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class GetTxt : MonoBehaviour
{
    // Start is called before the first frame update



    public GameObject ItemObj;
    
    public Transform parentObj;


    void Start()
    {


        

       

        GameObject.Find("Item1").GetComponentInChildren<TextMeshProUGUI>().text = "USER111111111111";

        GameObject.Find("Item2").GetComponentInChildren<TextMeshProUGUI>().text = "USER2222222222222";

        Instantiate(ItemObj, parentObj);
        GameObject gg =  Instantiate(ItemObj, parentObj);
        gg.name = "Itme11";




    }

    // Update is called once per frame
    void Update()
    {
       
    }

}
